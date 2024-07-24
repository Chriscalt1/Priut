package org.example;

import java.sql.Connection;
import java.sql.SQLException;
import javax.annotation.Resource;
import javax.sql.DataSource;

public class TestConnection {
    @Resource(name = "java:comp/env/jdbc/priut")
    private DataSource dataSource;

    public static void main(String[] args) {
        TestConnection testConnection = new TestConnection();
        testConnection.connectToDatabase();
    }

    public void connectToDatabase() {
        try (Connection connection = dataSource.getConnection()) {
            if (connection != null) {
                System.out.println("Connection successful!");
            } else {
                System.out.println("Failed to make connection!");
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}