CREATE FUNCTION calculateDiscountPrice(@listPrice DECIMAL(10, 2), @discountPercentage DECIMAL(5, 2))
RETURNS DECIMAL(10, 2)
AS
BEGIN
  DECLARE @discountedPrice DECIMAL(10, 2);
  SET @discountedPrice = @listPrice - (@listPrice * @discountPercentage / 100);
  RETURN @discountedPrice;
END;
