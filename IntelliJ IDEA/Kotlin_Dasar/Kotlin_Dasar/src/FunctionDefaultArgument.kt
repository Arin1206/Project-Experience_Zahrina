fun hello(first:String,last:String?=null){
    if (last == null){
        println("Hello $first")
    }
    else{
        println("hello $first $last")
    }
}

fun main() {
    hello("Arin")
    hello("Arin","Cantik")
}