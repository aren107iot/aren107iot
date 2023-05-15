SELECT
	`classes`.`name` as "班級",
	count(`class_student`.`class_code`) as '人數',
	sum(`student_scores`.`score`) as "總分",
	avg(`student_scores`.`score`) as "平均分數",
	(
		select
			count(*)
		from
			(
				SELECT
					`classes`.`name` as "班級",
					avg(`student_scores`.`score`) as "平均分數"
				FROM
					`class_student`,
					`student_scores`,
					`classes`
				WHERE
					`class_student`.`school_num` = `student_scores`.`school_num` & & `class_student`.`class_code` = `classes`.`code`
				GROUP BY
					`class_student`.`class_code`
			) A
		where
			`A`.`平均分數` >= avg(`student_scores`.`score`)
	) as '名次'
FROM
	`class_student`,
	`student_scores`,
	`classes`
WHERE
	`class_student`.`school_num` = `student_scores`.`school_num` & & `class_student`.`class_code` = `classes`.`code`
GROUP BY
	`class_student`.`class_code`