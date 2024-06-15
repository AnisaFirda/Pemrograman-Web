INSERT INTO USER (username, nama, email, pswd, ACTIVE)
VALUES
{
	'editor2', 'Editor Website', 'editor@website.com',
	MD5(SHA1('123')),1
};