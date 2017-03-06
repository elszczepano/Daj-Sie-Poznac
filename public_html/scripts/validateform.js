$("#contact-form").validate({
    errorClass: "text-danger",
  rules: {
      name: "required",
      subject: "required",
      content: "required",
      email: {
          required: true,
          email: true
      }
},  
    messages: {
      subject: "Nie podałeś tematu.",
      name: "Nie podałeś danych osobowych.",
      content: "Nie podałeś treści wiadomości.",
      email:{
          required: "Nie podałeś adresu e-mail.",
          email: "Upewnij się, że podałeś poprawny adres e-mail"
      }
  }
});