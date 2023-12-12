package alpro;

public class UjiSetLength {

	public static void main(String[] args) {
		StringBuffer buf = new StringBuffer ("Mari sirami cinta yang tulus di dalam hati.");
		System.out.println("buf = "+buf);
		System.out.println("buf.length = "+buf.length());
		System.out.println("buf.capacity = "+buf.capacity());
		buf.setLength(60);
		System.out.println("buf = "+buf);
		System.out.println("buf.length = "+buf.length());
		System.out.println("buf.capacity = "+buf.capacity());
		buf.setLength(30);
		System.out.println("buf = "+buf);
		System.out.println("buf.length = "+buf.length());
		System.out.println("buf.capacity = "+buf.capacity());
		buf.reverse();
		System.out.println("buf = "+buf);
		System.out.println("buf.length = "+buf.length());
		System.out.println("buf.capacity = "+buf.capacity());
		
	}

}
