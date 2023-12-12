package alpro;
import java.util.Scanner;
public class latihan {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		String nama = sc.nextLine();
		String [] nama_Splitted= nama.split(" ");
		System.out.print("Hi "+nama_Splitted[0]);	
		System.out.println();
		for (int i=nama_Splitted.length-1;i>=0;i--) {
			System.out.print(nama_Splitted[i]+" ");
		}System.out.println();
		for (int i=nama_Splitted.length-1;i>=0;i--) {
			for (int j=nama_Splitted[i].length()-1;j>=0;j--) {
				char huruf = nama_Splitted [i].charAt(j);
				if (j==nama_Splitted[i].length()-1) {
					huruf=(char)(huruf-'a'+'A');
				}else {
					if (huruf >='A'&& huruf <='Z') {
						huruf =(char)(huruf -'A'+'a'); 

					}
				}
			System.out.print(huruf);
		}System.out.println( );
		if (nama==nama_Splitted[0]) {
			System.out.print(" ini adalah poliandrome ");
		}else {
			System.out.print("ini bukan poliandrome");
		}
			
	}System.out.println();
		for (int i = 0;i<=nama.length()-1;i++) {
			char huruf = nama.charAt(i);
			if(huruf == ' ') {
				System.out.print("*");
			}else {
				if (huruf >='A'&& huruf <='Z') {
					huruf= (char)(huruf+3);
				if (huruf >='Z') {
					huruf =(char) (huruf-26);
				}
				}else {
					huruf = (char)(huruf+3);
					if (huruf >='z') {
						huruf = (char)(huruf-26);
					}  
				}
			}
			System.out.print(huruf);
		}

}
	}

