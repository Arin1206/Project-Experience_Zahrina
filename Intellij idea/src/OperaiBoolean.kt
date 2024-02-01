fun main() {
    val nilaiUjian = 80
    val nilaiabsen = 80

    val apakahlulusujian = nilaiUjian > 75
    val apakahlulusabsen = nilaiUjian > 75

    val apakahlulus = apakahlulusujian && apakahlulusabsen
    println(apakahlulus)
}