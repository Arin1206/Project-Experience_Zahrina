fun main() {
    var i = 0
    while(true){
        println("Helli ke $i")
        i++
        if (i>1000){
            break
        }
    }
    //continue
    for (i in 1..1000){
        if(i %2 ==0){
            continue
        }
        println("angka $i")
    }
}