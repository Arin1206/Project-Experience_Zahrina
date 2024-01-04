fun main() {
    tailrec fun display(value:Int){
        println(value)
        if(value>0){
            display(value-1)
        }
    }
    println(display(10000))
    tailrec fun factorialrecursive(value:Int,total:Int):Int{
        return when (value){
            1->total
            else -> factorialrecursive(value-1,total*value)
        }
    }
    println(factorialrecursive(10,10))
}