package alpro;

public class DoWhileUntukMenu {

	public static void main(String[] args) 
		throws java.io.IOException{
			
		char pilihan;
		do {
			System.out.println("Silahkan pilih : ");
			System.out.println("1.if\n2.switch\n3.While\n4.do-While\n5.for\n\nPilih satu: ");
			pilihan =(char) System.in.read();
		}while (pilihan < '1'||pilihan>'5');
		switch (pilihan) {
		case '1' :
			System.out.println("Statemen if :\n\nif(kondisi)\nelse statemen");
		break;
		case '2':
			System.out.println("statemen Switch :\n\n switch (ekspresi) {\n case konstanta:\n runtun Statemen\n break;\n //...\n}");
		break;
		case '3':
			System.out.println("Loop While: \n\nwhile(kondisi)statemen;\n");
		break;
		case '4':
			System.out.println("Loop do-while : \n\ndo {\n statemen;\n} while (kondisi);");
		break;
		case '5':
			System.out.println("Loop for: \n\nfor(inisialisasi;kondisi;iterasi)\n statemen;");
		break; 
		}
	}

}
