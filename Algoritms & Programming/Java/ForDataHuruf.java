package alpro;

public class ForDataHuruf {

	public static void main(String[] args) {
		for (char c=0; c<128;c++) {
			if (Character.isUpperCase(c)) 
				System.out.println("nilai : "+(int)c+"\t\tKarakter : "+c);
		}

	}

}
