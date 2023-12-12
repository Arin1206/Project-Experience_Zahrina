package alpro;

public class ForEachBreak {

	public static void main(String[] args) {
		int angka []= {1,2,3,4,5,6,7,8,9,10};
		int jum =0;
		for (int x :angka) {
			System.out.println("Nilai adalah "+x);
			jum +=x;
			if (x==5) break;
		}System.out.println("Jumlah penjumlahan adalah "+jum);
	}

}
