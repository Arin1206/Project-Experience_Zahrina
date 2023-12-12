package alpro;

public class ForPrima {

	public static void main(String[] args) {
		int angka =19;
		boolean apaprima =true;
		
		for (int i =2;i<=angka/i;i++) {
			if(angka%i==0) {
				apaprima = false;
				break;
			}
		}
		if (apaprima)System.out.println(angka +" adlaah bilangan prima");
		else System.out.println(angka +" bukan bilangan prima");

	}

}
