fun main() {
    fun sayhello(name:String=""):String{
        when(name){
            ""->return "Hello"
            else -> return "Hello $name"
        }
//        return if (name==""){
//            "Hello Bro"
//        }else{
//            "Hello $name"
//        }
    }
    println(sayhello(""))
    println(sayhello("Arin"))
}