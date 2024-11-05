DELIMITER //

CREATE TRIGGER reduce_available_stock_after_insert5
AFTER INSERT ON order_details_all
FOR EACH ROW
BEGIN
    DECLARE required_bricks INT;
    DECLARE required_cement INT;
    DECLARE required_steel INT;
    DECLARE available_bricks INT;
    DECLARE available_cement INT;
    DECLARE available_steel INT;
    -- Calculate the number of bricks required for the new order
    SET required_bricks = NEW.no_of_bricks;

    SELECT available_stock INTO available_bricks FROM stock_details WHERE item = 'bricks' FOR UPDATE;

    IF available_bricks >= required_bricks THEN
        -- Update the available_stock in stock_details for the 'bricks' item
        UPDATE stock_details
        SET available_stock = available_stock - required_bricks
        WHERE item = 'bricks';
    ELSE
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Error: Insufficient available stock for bricks in this order';
    END IF;
    
    -- Similar logic for 'cement'
    SET required_cement = NEW.no_of_packs;
    
    SELECT available_stock INTO available_cement FROM stock_details WHERE item = 'cements' FOR UPDATE;
    
    IF available_cement >= required_cement THEN
        -- Update the available_stock in stock_details for the 'cement' item
        UPDATE stock_details
        SET available_stock = available_stock - required_cement
        WHERE item = 'cements';
    ELSE
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Error: Insufficient available stock for cement in this order';
    END IF;

    -- Similar logic for 'sand'
    

    -- Similar logic for 'steel'
    SET required_steel = NEW.ton;
    
    SELECT available_stock INTO available_steel FROM stock_details WHERE item = 'steel' FOR UPDATE;
    
    IF available_steel >= required_steel THEN
        -- Update the available_stock in stock_details for the 'steel' item
        UPDATE stock_details
        SET available_stock = available_stock - required_steel
        WHERE item = 'steel';
    ELSE
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Error: Insufficient available stock for steel in this order';
    END IF;
END;
//

DELIMITER ;
