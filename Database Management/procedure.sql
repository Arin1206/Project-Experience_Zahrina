CREATE PROCEDURE setListPrice(@productID INT, @newListPrice DECIMAL(10, 2))
AS
BEGIN
  -- Mengubah listPrice dalam tabel "Product"
  UPDATE Production.Product
  SET ListPrice = @newListPrice
  WHERE ProductID = @productID;

  -- Mencatat perubahan harga dalam tabel "ProductListPriceHistory"
  INSERT INTO Production.ProductListPriceHistory (ProductID, ListPrice, ModifiedDate,StartDate)
  VALUES (@productID, @newListPrice, GETDATE(),GETDATE());
END;
