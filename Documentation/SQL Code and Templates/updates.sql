UPDATE cs312_payment SET 
  cardName = ?, 
  sortcode = ?, 
  securityNo = ?, 
  expiryMonth = ?, 
  expiryYear = ? 
WHERE
  cs312_useremail = ? AND cardNo = ?;
UPDATE cs312_stock SET 
  description = ?, 
  category = ?, 
  quantity = ?, 
  price = ?, 
  image = ? 
WHERE
  name = ? AND `size` = ? AND colour = ?;
UPDATE cs312_orderItem SET 
  quantityOrdered = ? 
WHERE
  cs312_orderId = ? AND cs312_stockname = ? AND cs312_stocksize = ? AND cs312_stockcolour = ?;
UPDATE cs312_order SET 
  cs312_useremail = ?, 
  `date` = ?, 
  street = ?, 
  town = ?, 
  county = ?, 
  postcode = ? 
WHERE
  Id = ?;
UPDATE cs312_user SET 
  fname = ?, 
  sname = ?, 
  dob = ?, 
  password = ? 
WHERE
  email = ?;
