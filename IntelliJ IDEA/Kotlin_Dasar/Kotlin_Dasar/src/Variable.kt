const val APPLICATION = "Belajar kotlin"
const val Version= "0.0.1"

fun main() {
    val firstname="Arin"
    val age = 19 // Val tidak bisa diisi nilai lain dan digunakan secara global (immutable)

    println(firstname)
    println(age)

    var name:String?= null //var bisa diisi nilai lain sehingga disebut mutable
    name = "Arins"
    println(name)
    println(name?.length)
    println("$APPLICATION : $Version")
}
