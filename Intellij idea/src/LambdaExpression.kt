fun touuper (value:String):String = value.toUpperCase()
fun main() {
    //membuat lambda
    val lambdaname: (String,String)-> String = {firstname:String,lastname:String->
      val result = "$firstname $lastname"
        result
    }
    //mengeksekusi lambda
    println(lambdaname("Arin","Cantik"))

    //lambda parameter 1 dengan it
    val lambda: (String) ->String = {
        "Hello $it"
    }
    println(lambda("Arin"))

    //membuat lambda dari references
    val lmbd : (String)->String = ::touuper

    println(lmbd("Aku"))
}