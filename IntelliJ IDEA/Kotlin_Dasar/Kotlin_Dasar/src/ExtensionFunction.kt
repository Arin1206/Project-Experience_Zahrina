fun String.hello():String = "Hello $this"

fun main() {
    val name : String = "Arin"
    println(name.hello())
}