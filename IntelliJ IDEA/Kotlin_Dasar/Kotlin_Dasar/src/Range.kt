fun main() {
    //val range = 1..100
    val range = 100 downTo 1 step 10
    println(range.count())
    println(range.contains(101))
    println(range.contains(0))
    println(range.first)
    println(range.last)
    println(range.step)

}