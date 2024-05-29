DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateAuctionStatus`()
BEGIN
    -- Update the status from 'buka' to 'tutup' for auctions that have reached their end date
    UPDATE lelang
    SET status = 'tutup'
    WHERE tgl_lelang = CURDATE() AND status = 'buka';
END$$
DELIMITER ;
