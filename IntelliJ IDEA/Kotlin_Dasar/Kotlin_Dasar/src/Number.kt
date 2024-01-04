fun main() {
    var byte : Byte = 30
    var int : Int = 200
    var gravitasi : Float = 10.98F //F untuk deklarasi Float
    var binary : Int = 0b010101010

   // underscore in number
   var price: Long =9_000_000_000L

   // Conversion
    var priceint: Int = price.toInt()
    println(priceint)
    var doublebinary: Double = binary.toDouble()
    println(doublebinary)

    println(byte)
    println(int)
    println(gravitasi)
    println(binary)
    println(price)
}