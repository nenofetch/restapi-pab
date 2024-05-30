package com.nenofetch.restfulapi.data;

public class User {
    private int id;
    private final String name;
    private final String email;

    private final String password;

    private final String hobi;

    public User(String name, String email, String password, String hobi) {
        this.name = name;
        this.email = email;
        this.password = password;
        this.hobi = hobi;
    }

    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getEmail() {
        return email;
    }

    public String getPassword() {
        return password;
    }

    public String getHobi() {
        return hobi;
    }
}

