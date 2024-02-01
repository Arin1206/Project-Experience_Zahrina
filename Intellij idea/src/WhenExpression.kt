fun main() {
    val nilai = "a"
    val nilailulus : Array<String> = arrayOf("a","b","c")
    when(nilai){
        "a" -> {
            println("amaze")
        }
        "b" -> {
        println("amaze2")
        }
        "c" -> {
            println("amaze3")
        }
        "d" -> {
            println("amaze4")
        }
        else-> {
            println("amaze5")
        }
    }
    //kondisi banyak statement
    when(nilai){
        "a","b","c" -> {
            println("oke")
        }else ->{
            println("hmmm")
        }
    }
    //array
    when(nilai){
        in nilailulus ->println("lulus")
        !in nilailulus -> println("tidaklulus")
    }
    //pengecekkan string
    var name = "Eko"
    when (name){
        is String ->println("is string")
        !is String ->println("not string")
    }
}