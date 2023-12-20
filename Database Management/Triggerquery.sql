CREATE TRIGGER updateDiscountPrice
ON Production.Product
AFTER UPDATE
AS
BEGIN
  IF UPDATE(listPrice)
  BEGIN
    UPDATE Sales.SpecialOffer
    SET DiscountPct = dbo.calculateDiscountPrice(ListPrice, Sales.SpecialOffer.DiscountPct)
    FROM Sales.SpecialOffer
    JOIN inserted ON Sales.SpecialOffer.SpecialOfferID= inserted.productID;
  END;
END;
