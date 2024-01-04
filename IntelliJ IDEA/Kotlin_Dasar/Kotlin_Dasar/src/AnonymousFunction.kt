fun main() {
    val anonymousupper = fun (value:String):String{
        if (value.isBlank()){
            return "ups"
        }
        return value.toUpperCase()
    }
    println(hello("Aku",anonymousupper))
}