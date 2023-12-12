package alpro;

import java.util.Calendar;

public class DaftarKeluarga {
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
	 public static final String GREEN_BRIGHT = "\u001b[92m";
	 public static final String YELLOW_BRIGHT = "\u001b[93m";
	 public static final String BLUE_BRIGHT = "\u001b[94m";
	 public static final String MAGENTA_BRIGHT = "\u001b[95m";
	 public static final String RED_BOLD ="\u001b[1;31m";
	 public static final String PURPLE_BACKGROUND ="\u001b[45m";
	 public static final String CYAN_BACKGROUND = "\u001b[46m";
	 public static final String RED_BACKGROUND_BRIGHT ="\u001b[0;101m";
	 public static final String WHITE_UNDERLINED ="\u001b[4;37m";
	 
	 public static final String BLINK = "\u001b[5m";
		public static void main(String[] args) {
				String n1,n2,n3,n4,k1,k2,t1,t2,t3,t4,Y1,Y2,Y3,Y4;
				int u1,u2,u3,u4,ts;
				char g1,g2;
				//Golongan Darah 
				g1 = 'B';
				g2 = 'O';
				
				//Nama 
				n1 ="Suprijadi";
				n2 ="Yoni tri Asmoro";
				n3 ="Zahrina Candrakanti";
				n4 ="Azka Boy Priasmoro";
				
				//Jenis Kelamin
				k1 = "Laki-Laki";
				k2 = "Perempuan";
				
				//Tempat Tanggal Lahir
				t1 = "Surabaya, 20 April 1970";
				t2 = "Purworejo, 4 Oktober 1977";
				t3 = "Sidoarjo, 6 Desember 2004";
				t4 = "Sidoarjo, 27 Oktober 2018";
				
				//inisialisasi Kalender 
				Calendar Kalender = Calendar.getInstance();
				ts= Kalender.get(Calendar.YEAR);
				
				//umur ayah
				Y1=(t1.substring(19, 23));
				int Y1int = Integer.parseInt(Y1);
				int tahun = ts-Y1int;
				u1=tahun;
				//umur ibu
				Y2=(t2.substring(21, 25));
				int Y2int = Integer.parseInt(Y2);
				int tahun2 = ts-Y2int;
				u2=tahun2;
				//umur anak pertama
				Y3=(t3.substring(21, 25));
				int Y3int = Integer.parseInt(Y3);
				int tahun3 = ts-Y3int;
				u3=tahun3;
				//umur anak kedua
				Y4=(t4.substring(21, 25));
				int Y4int = Integer.parseInt(Y4);
				int tahun4 = ts-Y4int;
				u4=tahun4;
				
				System.out.println(NORMAL+BLUE_BRIGHT+"====================DAFTAR KELUARGA====================\n"+NORMAL);
				//biodata ayah 
				System.out.println(RED_BACKGROUND_BRIGHT+BLACK+"KEPALA KELUARGA "+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Nama				: "+NORMAL+WHITE_UNDERLINED+n1+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Jenis Kelamin			: "+NORMAL+WHITE_UNDERLINED+k1 +NORMAL);
				System.out.println(YELLOW_BRIGHT+"Golongan Darah		: "+NORMAL+WHITE_UNDERLINED+ g1+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Tempat,Tanggal lahir	: "+NORMAL+WHITE_UNDERLINED+ t1+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Umur Tahun ini		: "+NORMAL+WHITE_UNDERLINED+u1+" tahun"+NORMAL+BLUE_BRIGHT);
				System.out.println("=======================================================\n");

				//biodata ibu 
				System.out.println(RED_BACKGROUND_BRIGHT+BLACK+"IBU RUMAH TANGGA "+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Nama				: "+NORMAL+WHITE_UNDERLINED+n2+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Jenis Kelamin			: " +NORMAL+WHITE_UNDERLINED+k2+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Golongan Darah		: "+NORMAL+WHITE_UNDERLINED+g2+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Tempat,Tanggal lahir	: "+NORMAL +WHITE_UNDERLINED+t2+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Umur Tahun ini		: "+NORMAL+WHITE_UNDERLINED+u2+" tahun"+NORMAL+BLUE_BRIGHT);
				System.out.println("=======================================================\n");

				System.out.println(RED_BACKGROUND_BRIGHT+BLACK+"ANAK PERTAMA "+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Nama				: "+NORMAL+WHITE_UNDERLINED+n3+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Jenis Kelamin			: "+NORMAL +WHITE_UNDERLINED+k2+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Golongan Darah		: "+NORMAL +WHITE_UNDERLINED+g1+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Tempat,Tanggal lahir	: "+NORMAL +WHITE_UNDERLINED+t3+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Umur Tahun ini		: "+NORMAL+WHITE_UNDERLINED+u3+" tahun"+NORMAL+BLUE_BRIGHT);
				System.out.println("=======================================================\n");
				
				System.out.println(RED_BACKGROUND_BRIGHT+BLACK+"ANAK KEDUA "+NORMAL);	
				System.out.println(YELLOW_BRIGHT+"Nama				: " +NORMAL +WHITE_UNDERLINED+n4+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Jenis Kelamin			: "+NORMAL  +WHITE_UNDERLINED+k1+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Golongan Darah		: "+NORMAL  +WHITE_UNDERLINED+g2+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Tempat,Tanggal lahir	: "+NORMAL  +WHITE_UNDERLINED+t4+NORMAL);
				System.out.println(YELLOW_BRIGHT+"Umur Tahun ini		: "+NORMAL+WHITE_UNDERLINED+u4+" tahun"+NORMAL+BLUE_BRIGHT);
				System.out.println("=======================================================\n");


	}

}
