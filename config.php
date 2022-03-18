変換テーブル
 					Oracle		DB2				SQLServer2000	SQLServer2005	SQLServer2008	MySQL			PostgreSQL
VARCHAR(n)
可変長文字列		VARCHAR2(n)	VARCHAR(n)		VARCHAR(n)		VARCHAR(n)		VARCHAR(n)		VARCHAR			character varying
CHAR(n)
固定長文字列		CHAR(n)		CHAR(n)			CHAR(n)			CHAR(n)			CHAR(n)			CHAR			character
DECIMAL(n,m)
桁指定付き数値		NUMBER(n,m)	DECIMAL(n,m)	DECIMAL(n,m)	DECIMAL(n,m)	DECIMAL(n,m)	DECIMAL(n,m)	numeric(n,m)
INT
整数				NUMBER(10)	INTEGER			INTEGER			INTEGER			INTEGER			INT				integer
FLOAT
単精度浮動小数点	NUMBER		DECIMAL			FLOAT			FLOAT			FLOAT			FLOAT			real
DOUBLE
倍精度浮動小数点	NUMBER		DECIMAL			REAL			REAL			REAL			DOUBLE			double precision
DATE
日付				DATE		DATE			DATETIME		DATETIME		DATE			DATE			date
TIME
時刻				DATE		TIME			DATETIME		DATETIME		TIME			TIME			time
DATETIME
日付時刻			DATE		TIMESTAMP		DATETIME		DATETIME		DATETIME		DATETIME		timestamp
