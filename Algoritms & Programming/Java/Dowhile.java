package alpro;

import java.util.Scanner;

public class Dowhile {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		String Ulang = "n";
		do {
			System.out.println ("Hello");
			System.out.println("Apakah anda ingin disapa lagi ");
			Ulang=sc.next();
		}while (Ulang.equalsIgnoreCase("y"));
		System.out.println("oke selamat tinggal");
	}

}
