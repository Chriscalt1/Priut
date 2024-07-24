package org.example;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;

public class DB {
	
final static String DB_URL = "jdbc:mysql://localhost/diplo_cloud";
final static String USER = "root";
final static String PASS = "Kjvnbr97#7-1";
public static Connection con() {
	Connection con;
	try {
		Class.forName("com.mysql.jdbc.Driver");
		con = DriverManager.getConnection(DB_URL, USER, PASS);
		return con;
	} catch (Exception e) { 
System.out.println(e);
	return null;
	}
}
public static Statement st() {
	Statement stmt;
	try {
		stmt=DB.con().createStatement();
		return null;
	} catch(Exception e){ 
		System.out.println(e);
		return null;
	}
	
}

}
