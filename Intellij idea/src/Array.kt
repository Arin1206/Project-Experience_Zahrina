fun main() {
    val names: Array<String?> = arrayOf("Arin","Azka")
    //names.set(1,"Yoni")
    names[0] =null
    println(names[0])

    val nilai:Array<Int> = arrayOf(10,9,8)
    println(nilai[0])
    println(nilai[1])
    println(nilai[2])

    val members: Array<String?> = arrayOfNulls(5)
    members[0] = "Arin"
    members[1] = "Arin"
    members[2] = "Arin"
    members[3] = null
    members[4] = "Arin"
    println(members.size)
}