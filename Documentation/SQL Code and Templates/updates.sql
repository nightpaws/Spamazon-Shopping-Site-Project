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
  quantity = ?, 
  price = ?, 
  image = ? 
WHERE
  name = ? AND `size` = ? AND colour = ?;
UPDATE cs312_orderItem SET 
  cs312_stockname = ?, 
  cs312_stocksize = ?, 
  cs312_stockcolour = ?, 
  quantityOrdered = ? 
WHERE
  cs312_orderId = ?;
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
