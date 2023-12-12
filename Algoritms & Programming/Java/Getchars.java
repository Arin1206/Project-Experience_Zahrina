package alpro;
public class Getchars {
	public static void main(String[] args) {
		String kata = "ini ada demo penggunaan metode getchars";
		int awal = 8;
		int akhir = 21;
		char buf []= new char [akhir-awal];
		kata.getChars(awal, akhir, buf, 0);
		System.out.println(buf);
	}

}
