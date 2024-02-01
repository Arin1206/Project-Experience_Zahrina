fun main() {
    var firstname: String = "Arin"
    var lastname: String = "Kannedy"

    var address: String = """
    >Zahrina Candrakanti
    >Griyo Wage Asri 2 
    >Ab-05, Wage, Sidoarjo
    """.trimMargin(">")

    var fullname: String = "$firstname $lastname"
    var desc: String = "$fullname length = ${fullname.length}"
    println(firstname)
    println(lastname)
    println(address)
    println(fullname)
    println(desc)
}