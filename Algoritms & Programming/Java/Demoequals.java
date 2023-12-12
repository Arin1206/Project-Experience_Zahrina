package alpro;

public class Demoequals {

	public static void main(String[] args) {
		String s1 = "Hallo";
		String s2 = "Hallo";
		String s3 = "Biarlah";
		String s4 = "HALLO";
		
		System.out.println(s1+" equals "+s2+" -> "+s1.equals(s2));
		System.out.println(s1+" equals "+s3+" -> "+s1.equals(s3));
		System.out.println(s1+" equals "+s4+" -> "+s1.equals(s4));
		System.out.println(s1+" equalsIgnoreCase "+s4+" -> "+s1.equalsIgnoreCase(s4));

	}

}
