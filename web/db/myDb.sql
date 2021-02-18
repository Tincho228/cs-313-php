CREATE TYPE public."ENUM" AS ENUM ('1','2','3');

CREATE table public.clients
(
    cl_id SERIAL NOT NULL PRIMARY KEY,
    cl_firstname VARCHAR(25) NOT NULL,
    cl_lastname VARCHAR(25) NOT NULL,
    cl_email VARCHAR(255) UNIQUE NOT NULL,
    cl_phone VARCHAR(50) NOT NULL,
    cl_level "ENUM" NOT NULL DEFAULT '1'::"ENUM",	
    cl_password VARCHAR(255) UNIQUE NOT NULL
);

CREATE table public.products
(
    pr_id SERIAL NOT NULL PRIMARY KEY,
    pr_name VARCHAR(25) NOT NULL,
    pr_price INT NOT NULL,
    pr_comment TEXT NOT NULL,	
    pr_path VARCHAR(100) NOT NULL
);

CREATE table public.orders
(
    or_id SERIAL NOT NULL PRIMARY KEY,
    cl_id INT,
    pr_id INT,
    FOREIGN KEY (cl_id) REFERENCES public.clients(cl_id) ON DELETE CASCADE,
    FOREIGN KEY (pr_id) REFERENCES public.products(pr_id)
);

CREATE table public.memberships 
(
    mem_id SERIAL NOT NULL PRIMARY KEY,
    mem_link VARCHAR(50) NOT NULL DEFAULT 'join',
    mem_Status BOOLEAN NOT NULL DEFAULT '0', 
    mem_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    cl_id INT,	
    FOREIGN KEY (cl_id) REFERENCES public.clients(cl_id) ON DELETE CASCADE
);

CREATE table public.contact_us
(
    cus_id SERIAL NOT NULL PRIMARY KEY,
    cus_name VARCHAR(50) NOT NULL,
    cus_phone INT NOT NULL,
    cus_mail VARCHAR(50) NOT NULL,
    cus_body TEXT NOT NULL,
    cus_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE table public.reviews
(
    rev_id SERIAL NOT NULL PRIMARY KEY,
    rev_text TEXT NOT NULL,
    rev_date TIMESTAMP NOT NULL,
    mem_id INT,
    pr_id INT,
    FOREIGN KEY (mem_id) REFERENCES public.memberships(mem_id),
    FOREIGN KEY (pr_id) REFERENCES public.products(pr_id)
);

CREATE table public.mails
(
    mail_id SERIAL NOT NULL PRIMARY KEY,
    mail_subject VARCHAR(50) NOT NULL,
    mail_body TEXT NOT NULL,
    mail_sender_id INT NOT NULL,
    mail_receiver_id INT NOT NULL,
    mail_date TIMESTAMP NOT NULL,
    mem_id INT,
    FOREIGN KEY (mem_id) REFERENCES public.memberships(mem_id)
);

CREATE table public.instructors
(
    in_id SERIAL NOT NULL PRIMARY KEY,
    in_name VARCHAR(50) NOT NULL,
    in_lastname VARCHAR(50) NOT NULL,
    in_phone INT NOT NULL,
    in_comment TEXT NOT NULL,
    pr_id INT,
    FOREIGN KEY (pr_id) REFERENCES public.products(pr_id)
);

