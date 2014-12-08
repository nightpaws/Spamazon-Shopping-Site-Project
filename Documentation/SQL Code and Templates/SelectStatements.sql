SELECT cs312_useremail, cardNo, cardName, sortcode, securityNo, expiryMonth, expiryYear 
  FROM cs312_payment;
SELECT name, `size`, colour, description, category, quantity, price, image 
  FROM cs312_stock;
SELECT cs312_orderId, cs312_stockname, cs312_stocksize, cs312_stockcolour, quantityOrdered 
  FROM cs312_orderItem;
SELECT Id, cs312_useremail, `date`, street, town, county, postcode 
  FROM cs312_order;
SELECT email, fname, sname, dob, password 
  FROM cs312_user;
