-- Mengubah harga bandrol (list price) dan mencatat perubahan
EXEC setListPrice 1, 20.99;
-- Mengubah persentase diskon pada "SpecialOffer"
UPDATE Sales.SpecialOffer
SET DiscountPCT = 0.2
WHERE SpecialOfferID = 10;

