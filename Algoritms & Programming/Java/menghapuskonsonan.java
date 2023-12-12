package alpro;
import java.util.Scanner;
public class menghapuskonsonan {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		String jawaban=null;
		String nama =null;
		do {
			System.out.print("Masukkan nama anda : ");
			nama = sc.nextLine();
			String namalower = nama.toUpperCase();
			String namakhir= namalower.replaceAll("[A,I,U,E,O]", "");
			String []katabaru= (namakhir.split(" "));
			System.out.print("Setelah vokal dihapus : ");
			if (namakhir== "") {
				System.out.print("- ");
			}else {
				for (int i=0;i<=katabaru.length-1;i++) {
				System.out.print(katabaru[i].substring(0,1).toUpperCase()+katabaru[i].substring(1).toLowerCase()+" ");
			}
				
			} 
			System.out.println();
		System.out.println("Apakah anda ingin mengulang? ketik ya jika ingin,jika berhenti ketik tidak");
			jawaban=sc.nextLine();
			if (jawaban.equalsIgnoreCase("tidak")){
				System.out.println("Selamat tinggal semoga hari anda bahagia");
				System.out.println("=================================");
				break;
			}else {
				System.out.println("=================================");
			}
		}while (jawaban.equalsIgnoreCase("ya"));
		
	}
}
