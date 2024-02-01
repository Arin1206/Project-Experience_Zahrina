fun main() {
    var counter : Int = 0
    val lambdaincrement:()->Unit = {
        println("Increment")
        counter++
    }
    lambdaincrement()
    lambdaincrement()
    println(counter)
}