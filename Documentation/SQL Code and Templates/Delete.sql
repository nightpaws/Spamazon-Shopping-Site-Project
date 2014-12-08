DELETE FROM cs312_payment 
  WHERE cs312_useremail = ? AND cardNo = ?;
DELETE FROM cs312_stock 
  WHERE name = ? AND `size` = ? AND colour = ?;
DELETE FROM cs312_orderItem 
  WHERE cs312_orderId = ? AND cs312_stockname = ? AND cs312_stocksize = ? AND cs312_stockcolour = ?;
DELETE FROM cs312_order 
  WHERE Id = ?;
DELETE FROM cs312_user 
  WHERE email = ?;
