package alpro;
import java.util.Scanner;
public class kalengbersusun {
	public static final String NORMAL = "\u001b[0m";

	 public static final String BLACK = "\u001b[30m";
	 public static final String RED = "\u001b[31m";
	 public static final String GREEN = "\u001b[32m";
	 public static final String YELLOW = "\u001b[33m";
	 public static final String BLUE = "\u001b[34m";
	 public static final String MAGENTA = "\u001b[35m";
	 public static final String CYAN = "\u001b[36m";
	 public static final String WHITE = "\u001b[37m";
	 public static final String RED_BRIGHT = "\u001b[91m";
	 public static final String BLUE_BRIGHT = "\u001b[94m"; 
	 public static final String YELLOW_BRIGHT = "\u001b[93m";
	 public static final String RED_BOLD ="\u001b[1;31m";
	 
	public static final String BLINK = "\u001b[5m";
	public static void main(String[] args) {
	int hasil = rekursif (60);
	int n;
	System.out.println(YELLOW_BRIGHT+"Transaksi yang dibutuhkan pada bulan ke-12 adalah "+NORMAL+BLUE_BRIGHT+hasil);
	for (n=60;n>0;n--) {
			System.out.println(NORMAL+"Transaksi yang dibutuhkan adalah "+BLUE_BRIGHT+rekursif(n)+NORMAL+" pada bulan ke- "+WHITE+n+NORMAL);
		}
	}
	public static Integer rekursif (int i) {
		if (i == 1) {
			return i*15*104;
		}else {
			return i*15*104+rekursif(i-1);
		
		}
	}
}
