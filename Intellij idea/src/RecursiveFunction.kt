fun main() {
    // Factorial For Loop
    fun factorialloop(value: Int):Int {
        var result = 1
        for (i in value downTo 1){
            result *= i
        }
        return result
    }
    println(factorialloop(value=10))

    //factorial recursive function
    fun factorialrecursive(value:Int): Int{
        return when(value){
            1->1
            else -> value * factorialrecursive(value=value-1)
        }
    }
    println(factorialrecursive(value=10))
}