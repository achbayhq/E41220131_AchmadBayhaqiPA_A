package com.abayhq.junittest;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class testLuasPersegi {    //class testLuasPersegi untuk melakukan test pada class luasPersegi
    private luasPersegi test = new luasPersegi();   //membuat object dari class luasPersegi

    @Test
    public void testAddSucces(){    //metode yang berisi testingnya
        int result = test.add(10);      //memanggil metode add dari class luasPersegi lalu mengisi parameter sisi
        assertEquals(20, result);   //untuk mengecek apakah output yang disimpan pada result sama dengan hasil yang kita harapkan
    }
}
