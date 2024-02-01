fun main() {
    //array
    var names = arrayOf("Arin","Yoni","Azka")
    var total = 0
    for(name in names){
        println(name)
        total++
    }
    println("$total")

    //range
    for (value in 0..100){
        println(value)
    }
    for (i in 0..100 step 10){
        println(i)
    }

    //kombinasi
    val ukuran = names.size-1
    for (a in 0..ukuran){
        println(names.get(a))
    }
}