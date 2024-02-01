//varargs harus di statement terakhir jika parameter banyak
fun hitungtotal(vararg values : Int):Int{
    var total = 0
    for (value in values){
        total +=value
    }
    return total
}

fun main() {
    val result = hitungtotal(10,2,3,4,1)
    println(result)
}