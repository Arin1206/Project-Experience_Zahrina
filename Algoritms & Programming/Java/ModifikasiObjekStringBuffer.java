package alpro;

public class ModifikasiObjekStringBuffer {

	public static void main(String[] args) {
		StringBuffer buf = new StringBuffer (10);
		buf.append("Hari ini");
		System.out.println("buf = "+buf);
		System.out.println("buf.length = "+buf.length());
		System.out.println("buf.capacity = "+buf.capacity());
		buf.append(" mendung menyelimuti ");
		System.out.println("buf = "+buf);
		System.out.println("buf.length = "+buf.length());
		System.out.println("buf.capacity = "+buf.capacity());
		buf.append("matahari.");
		System.out.println("buf = "+buf);
		System.out.println("buf.length = "+buf.length());
		System.out.println("buf.capacity = "+buf.capacity());
	}

}
