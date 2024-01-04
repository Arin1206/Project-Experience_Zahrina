fun main() {
    loopI@ for(i in 1..10){
        loopJ@ for(j in 1..10){

            if (j==5){
                //break@loopI
                continue
            }
            println("$i * $j = ${i*j}")
        }
    }
}