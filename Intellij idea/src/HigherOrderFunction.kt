fun hello(value:String, transformer:(String)->String):String{
    return "Hello ${transformer(value)}"
}
fun main() {
    val uppertransformer ={value:String -> value.toUpperCase()}
    val lowertransformer ={value:String -> value.toLowerCase()}
    println(hello("Arin",uppertransformer))
    println(hello("Arin",lowertransformer))
    val result1 = hello("Arin"){value : String ->
        value.toUpperCase()
    }
    println(result1)
    val result2 = hello("Arin"){value : String ->
        value.toLowerCase()
    }


}