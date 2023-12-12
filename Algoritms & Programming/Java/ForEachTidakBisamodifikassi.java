package alpro;

public class ForEachTidakBisamodifikassi {

	public static void main(String[] args) {
		int angka []= {1,2,3,4,5,6,7,8,9,10};
		for (int x : angka) {
			System.out.print(x+" ");
			
		}System.out.println();
		for (int x : angka) {
			x*=10;System.out.print(x+" ");
		}
		System.out.println();
		for (int x :  angka) {
			
			System.out.print(x+" ");
			
		}
	}

}
